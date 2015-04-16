import java.util.Scanner;

public class Problem_04_SmallestNumber {
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		Double a = input.nextDouble();
		Double b = input.nextDouble();
		Double c = input.nextDouble();
		
		if (a < b) 
		{
			if (c < a) 
			{
				System.out.println(c);
			} else 
			{
				System.out.println(a);
			}
		} else if (b < a) 
		{
			if (c < b) {
				
				System.out.println(c);
			} else 
			{
				System.out.println(b);
			}
		}
	}
}
