using System;

namespace _04.MultiplicationSign
{
    class MultiplicationSign
    {
        static void Main()
        {
            Console.WriteLine("Enter three real numbers: ");
            double numberOne = double.Parse(Console.ReadLine());
            double numberTwo = double.Parse(Console.ReadLine());
            double numberThree = double.Parse(Console.ReadLine());

            Console.WriteLine(new string ('*',20));
            if (numberOne == 0 || numberTwo == 0 || numberThree == 0)
            {
                Console.WriteLine("0");
            }
            else if ((numberOne < 0) || (numberTwo < 0) || (numberThree < 0))
            {
                if ((numberOne > 0) || (numberTwo > 0) || (numberThree > 0))
                {
                    Console.WriteLine("+");
                }
                else
                {
                    Console.WriteLine("-");
                }
            }
            else
            {
                Console.WriteLine("+");
            }
        }
    }
}
