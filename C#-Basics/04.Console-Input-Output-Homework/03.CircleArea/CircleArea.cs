using System;

namespace _03.CircleArea
{
    class CircleArea
    {
        static void Main()
        {
            Console.Write("Enter a radius to see circle's perimeter and area: ");
            double radius = double.Parse(Console.ReadLine());

            double perimeter = 2 * Math.PI * radius;
            double area = (Math.PI * (radius * radius)) / 4;

            Console.WriteLine("The cirlce perimeter is: {0:F2}.", perimeter);
            Console.WriteLine("The circle area is: {0:F2}.", area);
        }
    }
}
