using System;

namespace _04.NumberComparer
{
    class NumberComparer
    {
        static void Main()
        {
            Console.WriteLine("Enter two number to see which one is greader. ");
            Console.Write("Enter first number: ");
            double firstNum = double.Parse(Console.ReadLine());
            Console.Write("Enter second number: ");
            double secondNum = double.Parse(Console.ReadLine());

            double biggerNum = Math.Max(firstNum, secondNum);

            Console.WriteLine("The bigger number is: {0}", biggerNum);
        }
    }
}
