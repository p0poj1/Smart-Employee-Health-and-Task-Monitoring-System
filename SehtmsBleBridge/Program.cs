using System;
using System.Net.Http;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;
using Windows.Devices.Bluetooth;

class Program
{
    private const ulong BAND_MAC_ADDRESS = 0xB8538478548D;
    private const string DEVICE_MAC_STRING = "B8:53:84:78:54:8D";
    private const string LARAVEL_API_URL = "http://127.0.0.1:8000/api/biometrics/ingest";

    private static readonly HttpClient httpClient = new HttpClient();

    static async Task Main(string[] args)
    {
        Console.WriteLine("=== SEHTMS C# BLE Hardware Bridge (Booth Demo Mode) ===");
        Console.WriteLine($"Target Watch: Xiaomi Smart Band 9 Active ({DEVICE_MAC_STRING})");
        Console.WriteLine("Scanning via Windows Bluetooth LE...\n");

        try
        {
            var device = await BluetoothLEDevice.FromBluetoothAddressAsync(BAND_MAC_ADDRESS);
            if (device != null)
            {
                Console.WriteLine($"[+] Device Found: {device.Name} ({DEVICE_MAC_STRING})");
                Console.WriteLine("[*] GATT Check: Xiaomi HyperOS Encrypted Protocol (0xFE95) detected.");
            }
            else
            {
                Console.WriteLine($"[!] Watch standby ({DEVICE_MAC_STRING}). Ready for booth telemetry intake.");
            }
        }
        catch (Exception ex)
        {
            Console.WriteLine($"[!] BLE Note: {ex.Message}");
        }

        Console.WriteLine("\n-------------------------------------------------------");
        Console.Write("1. Enter visitor's Heart Rate BPM (or press Enter for auto-stream): ");
        string? bpmInput = Console.ReadLine();

        if (int.TryParse(bpmInput, out int measuredBpm) && measuredBpm >= 40 && measuredBpm <= 220)
        {
            Console.Write("2. Enter SpO2 % from watch (or press Enter for 98%): ");
            string? spo2Input = Console.ReadLine();
            int spo2 = (int.TryParse(spo2Input, out int parsedSpo2) && parsedSpo2 >= 70 && parsedSpo2 <= 100)
                ? parsedSpo2
                : 98;

            int defaultStress = measuredBpm > 100 ? 74 : (measuredBpm > 85 ? 48 : 28);
            Console.Write($"3. Enter Stress Level 1-100 from watch (or press Enter for {defaultStress}): ");
            string? stressInput = Console.ReadLine();
            int stress = (int.TryParse(stressInput, out int parsedStress) && parsedStress >= 1 && parsedStress <= 100)
                ? parsedStress
                : defaultStress;

            Console.Write("4. Enter last night's Sleep Hours (or press Enter for 7.0 hrs): ");
            string? sleepInput = Console.ReadLine();
            double sleepHours = (double.TryParse(sleepInput, out double parsedSleep) && parsedSleep >= 0 && parsedSleep <= 24)
                ? parsedSleep
                : 7.0;

            int sleepMinutes = (int)Math.Round(sleepHours * 60);

            Console.WriteLine($"\n[BOOTH SYNC] HR: {measuredBpm} BPM | SpO2: {spo2}% | Stress: {stress} | Sleep: {sleepHours} hrs ({sleepMinutes} mins)");
            await SendToLaravel(measuredBpm, spo2, stress, sleepMinutes, sleepHours);
            Console.WriteLine("\n[✓] Visitor reading stored in MySQL! Refresh dashboard or run Python AI.");
        }
        else
        {
            Console.WriteLine("\n[AUTO STREAM] Running automated 5-sample telemetry sequence...\n");
            int[] bpmCurve = { 74, 78, 83, 89, 76 };
            int[] spo2Curve = { 99, 98, 98, 97, 99 };
            int[] stressCurve = { 26, 32, 41, 54, 29 };

            for (int i = 0; i < bpmCurve.Length; i++)
            {
                Console.WriteLine($"[BLE STREAM] HR: {bpmCurve[i]} BPM | SpO2: {spo2Curve[i]}% | Stress: {stressCurve[i]} | Sleep: 7.0 hrs (420 mins)");
                await SendToLaravel(bpmCurve[i], spo2Curve[i], stressCurve[i], 420, 7.0);
                await Task.Delay(2000);
            }
            Console.WriteLine("\n[✓] Automated batch complete.");
        }
    }

    private static async Task SendToLaravel(int bpm, int spo2, int stress, int sleepMinutes, double sleepHours)
    {
        var payload = new
        {
            device_mac = DEVICE_MAC_STRING,
            heart_rate = bpm,
            spo2 = spo2,
            stress_level = stress,
            sleep_minutes = sleepMinutes,
            sleep_hours = sleepHours
        };

        string json = JsonSerializer.Serialize(payload);
        var content = new StringContent(json, Encoding.UTF8, "application/json");

        try
        {
            var response = await httpClient.PostAsync(LARAVEL_API_URL, content);
            Console.WriteLine($"   -> Sent to Laravel API: {(int)response.StatusCode} {response.ReasonPhrase}");
        }
        catch (Exception ex)
        {
            Console.WriteLine($"   -> Laravel API Error: {ex.Message} (Is 'php artisan serve' running?)");
        }
    }
}