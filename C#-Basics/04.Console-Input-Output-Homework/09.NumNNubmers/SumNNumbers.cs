using System;

namespace _09.NumNNubmers
{
    class SumNNumbers
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            string line = Console.ReadLine();
            int n = int.Parse(line);
            decimal sum = 0;
            Console.WriteLine("Enter {0} more number: ", n);
            for (int i = 0; i < n; i++)
            {
                decimal number = decimal.Parse(Console.ReadLine());
                sum = sum + number;
            }
            Console.WriteLine("The sum is: {0}.", sum);
        }
    }
}
