using System;

class RandomNumbers
{
    static void Main()
    {
        Console.Write("Min: ");
        int min = int.Parse(Console.ReadLine());
        Console.Write("Max: ");
        int max = int.Parse(Console.ReadLine());
        Console.Write("N: ");
        int n = int.Parse(Console.ReadLine());

        if (max > min)
        {
            Random number = new Random();
            for (int i = 0; i < n; i++)
            {
                Console.Write(number.Next(min, max + 1) + " ");
            }
 
            Console.WriteLine();
        }
    }
}
