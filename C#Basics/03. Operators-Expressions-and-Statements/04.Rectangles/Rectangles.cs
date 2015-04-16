using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _04.Rectangles
{
    class Rectangles
    {
        static void Main(string[] args)
        {
            Console.Write("Enter rectangle's width: ");
            double width = double.Parse(Console.ReadLine());

            Console.Write("Enter rectangle's height: ");
            double height = double.Parse(Console.ReadLine());

            double perimeter = 2 * width + 2 * height;
            Console.WriteLine("The parameter is {0}.", perimeter);
        }
    }
}
