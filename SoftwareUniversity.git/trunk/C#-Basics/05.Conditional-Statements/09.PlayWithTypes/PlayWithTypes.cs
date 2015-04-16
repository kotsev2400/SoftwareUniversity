using System;

namespace _09.PlayWithTypes
{
    class PlayWithTypes
    {
        static void Main()
        {
            Console.WriteLine("Please choose a type: ");
            Console.WriteLine("1 --> int");
            Console.WriteLine("2 --> double");
            Console.WriteLine("3 --> string");
            string type = Console.ReadLine();

            switch (type)
            {
                case "1":
                    Console.Write("Please enter a number: ");
                    int number = int.Parse(Console.ReadLine());
                    Console.WriteLine(number + 1);
                    break;
                case "2":
                    Console.Write("Please enter a double: ");
                    double doubN = double.Parse(Console.ReadLine());
                    Console.WriteLine(doubN + 1);
                    break;
                case "3":
                    Console.Write("Please enter a string: ");
                    string str = Console.ReadLine();
                    Console.WriteLine("{0}*", str);
                    break;
                default:
                    Console.WriteLine("Invalid type.");
                    break;
            }
        }
    }
}
