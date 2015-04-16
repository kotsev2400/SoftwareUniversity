using System;
using System.Numerics;

namespace _10.FibonacciNumbers
{
    class FibonacciNumbers
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());
            BigInteger firstN = 0;
            BigInteger secondN = 1;
            if (number < 1)
            {
                Console.WriteLine("The system can't contain 0 numbers.");
            }
            else if (number == 1)
            {
                Console.WriteLine("First number is {0}.", firstN);
            }
            else
            {
                Console.WriteLine(firstN);
                Console.WriteLine(secondN);
                BigInteger thirdN = 0;
                for (int i = 2; i < number; i++)
                {
                    thirdN = firstN + secondN;
                    Console.WriteLine(thirdN);
                    firstN = secondN;
                    secondN = thirdN;
                }
            }
        }
    }
}
