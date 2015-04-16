using System;

class CalculateNandX
{
    static void Main()
    {
        Console.WriteLine("Enter two numbers: ");
        int n = int.Parse(Console.ReadLine());
        int k = int.Parse(Console.ReadLine());

        double factN = 1;
        double factK = 1;
        double sum = 0;

        if (k > 1 && k < n && n < 100)
        {
            for (int i = 1; i <= n; i++)
            {
                factN *= i;
            }
            for (int j = 1; j <= k; j++)
            {
                factK *= j;
            }
            sum = factN / factK;
            Console.WriteLine("Sum: {0}", sum);
        }
        else
        {
            Console.WriteLine("Wrong Input. Please try again.");
        }
    }
}
