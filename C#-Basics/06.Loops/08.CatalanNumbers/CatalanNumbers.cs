using System;

    class CatalanNumbers
    {
        static void Main()
        {
            Console.WriteLine("Enter number: ");
            int n = int.Parse(Console.ReadLine());

            if (n > 1 && n < 100)
            {
                {
                    int multiFactN = 1;
                    int plusFactN = 1;
                    int factN = 1;
                    int sum = 0;

                    for (int i = 1; i <= 2 * n; i++)
                    {
                        multiFactN *= i;
                    }

                    for (int j = 1; j <= n + 1; j++)
                    {
                        plusFactN *= j;
                    }

                    for (int k = 1; k <= n; k++)
                    {
                        factN *= k;
                    }

                    sum = multiFactN / (plusFactN * factN);

                    Console.WriteLine(sum);
                }
            }
            else
            {
                Console.WriteLine("Wrong Input. Please, try again.");
            }
        }
    }
