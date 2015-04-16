using System;

namespace _05.FormattingNumbers
{
    class FormattingNumbers
    {
        static void Main()
        {
            Console.Write("Enter a number between 0 and 500: ");
            uint number = uint.Parse(Console.ReadLine());
            Console.Write("Enter a floating point number: ");
            float firstFloat = float.Parse(Console.ReadLine());
            Console.Write("Enter a second floating point number: ");
            float secondFloat = float.Parse(Console.ReadLine());

            if (number > 500 || number < 0)
            {
                Console.WriteLine("The number '{0}' isn't between 0 and 500. Please, try again.", number);
            }
            else
            {
                Console.WriteLine(new string('*', 75));
                Console.Write("{0}|{1}|{2} || ", number, firstFloat, secondFloat);
                Console.Write("{0, -10:X} | ", number);
                Console.Write("{0} | ", Convert.ToString(number, 2).PadLeft(16, '0'));
                Console.Write("{0, 10:F2} | ", firstFloat);
                Console.WriteLine("{0, -10:F3} | ", secondFloat);
                Console.WriteLine(new string('*', 75));
            }
        }
    }
}
