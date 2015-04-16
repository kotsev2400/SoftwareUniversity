using System;

namespace _01.SumNumbers
{
    class SumNumbers
    {
        static void Main()
        {
            Console.WriteLine("Enter three number to see their sum.");
            Console.Write("Enter first number: ");
            double firstNum = double.Parse(Console.ReadLine());
            Console.Write("Enter second number: ");
            double secondNum = double.Parse(Console.ReadLine());
            Console.Write("Enter third number: ");
            double thirdNum = double.Parse(Console.ReadLine());
            double sum = firstNum + secondNum + thirdNum;

            Console.WriteLine(new string('*', 50));
            Console.WriteLine("The sum of {0}, {1} and {2} is {3}.", firstNum, secondNum, thirdNum, sum);
            Console.WriteLine(new string('*', 50));
        }
    }
}
