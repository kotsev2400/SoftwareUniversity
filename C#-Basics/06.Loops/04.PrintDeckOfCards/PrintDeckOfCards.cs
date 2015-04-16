using System;
class PrintDeckOfCards
{
    static void Main()
    {
        for (int i = 2; i <= 14; i++)
        {
            for (int j = 3; j <= 6; j++)
            {
                switch (i)
                {
                    case 11:
                        Console.Write("J");
                        break;
                    case 12:
                        Console.Write("Q");
                        break;
                    case 13:
                        Console.Write("K");
                        break;
                    case 14:
                        Console.Write("A");
                        break;
                    default:
                        Console.Write(i);
                        break;
                }
                Console.Write((char)j);
            }
            Console.WriteLine();
        }
    }
}
