using System;

namespace _06.QuadraticEquation
{
    class QuadraticEquation
    {
        static void Main()
        {
            Console.WriteLine("Enter 3 coefficients to solve quadratic equation: ");
            Console.Write("a = ");
            double a = double.Parse(Console.ReadLine());
            Console.Write("b = ");
            double b = double.Parse(Console.ReadLine());
            Console.Write("c = ");
            double c = double.Parse(Console.ReadLine());

            double D = (b * b) - 4 * a * c;

            if (D > 0)
            {
                double x1 = -1 * b + Math.Sqrt(D) / 2 * a;
                double x2 = -1 * b - Math.Sqrt(D) / 2 * a;
                Console.WriteLine("X1= {0:F2} ; X2 = {1:F2}", x1, x2);
            }
            else if (D == 0)
            {
                double x = -1 * b / 2 * a;
                Console.WriteLine("X1 = X2 = {0:F2}", x);
            }
            else
            {
                Console.WriteLine("no real roots");
            }
        }
    }
}
