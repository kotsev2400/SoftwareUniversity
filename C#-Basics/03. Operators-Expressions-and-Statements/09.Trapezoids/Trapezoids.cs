using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _09.Trapezoids
{
    class Trapezoids
    {
        static void Main(string[] args)
        {
            Console.WriteLine("To calculate trapezoid's area please enter: ");
            Console.Write("side a : ");
            double a = double.Parse(Console.ReadLine());

            Console.Write("side b : ");
            double b = double.Parse(Console.ReadLine());

            Console.Write("height h : ");
            double h = double.Parse(Console.ReadLine());

            double area = ((a + b) * h) / 2;
            Console.WriteLine("The area is {0}", area);
        }
    }
}
