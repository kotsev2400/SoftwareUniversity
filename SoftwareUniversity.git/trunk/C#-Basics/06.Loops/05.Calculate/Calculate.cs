using System;

class Calculate
{
    static void Main()
    {
        Console.WriteLine("Enter two numbers: ");
        int inputN = int.Parse(Console.ReadLine());
        int inputX = int.Parse(Console.ReadLine());

        double n = 1;
        double x = 1;
        double sum = 1;

        for (int i = 1; i <= inputN; i++)
        {
            n *= i;
            x *= inputX;
            sum += n / x;
        }
        Console.WriteLine("Sum = {0:F5}", sum);
    }
}
