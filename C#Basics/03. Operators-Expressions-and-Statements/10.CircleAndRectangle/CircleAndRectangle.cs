using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _10.CircleAndRectangle
{
    class CircleAndRectangle
    {
        static void Main(string[] args)
        {
            Console.Write("Enter point X: ");
            double x = double.Parse(Console.ReadLine());
            Console.Write("Enter point Y: ");
            double y = double.Parse(Console.ReadLine());

            if ((((x - 1) * (x - 1)) + ((y - 1) * (y - 1)) <= 1.5 * 1.5) && (x > 1 || x < 6 && y > -1 || y < 2))
            {
                Console.WriteLine("The point is INSIDE.");
            }
            else
            {
                Console.WriteLine("The point is OUTSIDE.");
            }
        }
    }
}
