using System;
    class NotDivisibleByThreeAndSeven
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());

            for (int i = 1; i <= number; i++)
            {
                if ((i % 7 == 0) || (i % 3 == 0))
                {
                    continue;
                }
                Console.Write("{0} ", i);
            }
            Console.WriteLine();
        }
    }
