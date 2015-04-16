using System;

    class CalculateNandK
    {
        static void Main()
        {
            Console.WriteLine("Enter two numbers: ");
            int n = int.Parse(Console.ReadLine());
            int k = int.Parse(Console.ReadLine());

            int factN = 1;
            int factK = 1;
            int factNK = 1;
            int sum = 0;

            if (k > 1 && n > k && n < 100)
            {
                for (int i = 1; i <= n; i++)
                {
                    factN *= i;
                }
                for (int j = 1; j <= k; j++)
                {
                    factK *= j;
                }
                for (int l = 1; l <= n - k; l++)
                {
                    factNK *= l;
                }
                sum = factN / (factK * factNK);
                Console.WriteLine("Sum: {0}", sum);
            }
            else
            {
                Console.WriteLine("Wrong Input, Please, try again.");
            }
        }
    }
