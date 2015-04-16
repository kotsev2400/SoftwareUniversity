using System;

namespace _01.ExchangeNumbers
{
    class ExchangeNumbers
    {
        static void Main()
        {
            Console.WriteLine("Enter two numbers: ");
            int a = int.Parse(Console.ReadLine());
            int b = int.Parse(Console.ReadLine());

            if (a > b)
            {
                a = a ^ b;
                b = a ^ b;
                a = a ^ b;
            }
            Console.WriteLine(new string('*', 20));
            Console.WriteLine("{0} {1}", a, b);
        }
    }
}
