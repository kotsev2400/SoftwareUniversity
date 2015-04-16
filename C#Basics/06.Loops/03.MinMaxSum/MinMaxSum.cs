using System;
class MinMaxSum
{
    static void Main()
    {
        Console.Write("Enter length: ");
        int length = int.Parse(Console.ReadLine());

        int min = int.MaxValue;
        int max= int.MinValue;
        double sum = 0;
        double adv = 0;

        for (int i = 0; i < length; i++)
        {
            int numbers = int.Parse(Console.ReadLine());

            min = Math.Min(min, numbers);
            max = Math.Max(max, numbers);
            sum += numbers;
            adv = sum / length;
        }
        Console.WriteLine("Max: {0}", max);
        Console.WriteLine("Min: {0}", min);
        Console.WriteLine("Sum: {0}", sum);
        Console.WriteLine("Adv: {0:F2}", adv);
    }
}
