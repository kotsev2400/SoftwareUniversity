using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _07.PointInCircle
{
    class PointInCircle
    {
        static void Main(string[] args)
        {
            Console.Write("Enter X point: ");
            double x = double.Parse(Console.ReadLine());

            Console.Write("Enter Y point: ");
            double y = int.Parse(Console.ReadLine());

            if ((x * x) + (y * y) <= 2 * 2)
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
