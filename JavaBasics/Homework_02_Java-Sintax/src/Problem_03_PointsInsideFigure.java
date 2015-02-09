import java.util.Scanner;


public class Problem_03_PointsInsideFigure {
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		float y = input.nextFloat();
		float x = input.nextFloat();
		
		if ((x >= 6 && x <= 8.5 && y >= 12.5 && y <= 22.5)
			|| (x >= 8.5 && x <= 13.5 && y >= 12.5 && y <= 17.5)
			|| (x >= 8.5 && x <= 13.5 && y >= 20 && y <= 22.5))
		{
			System.out.println("Inside");
		}
		else
		{
			System.out.println("Outside");
		}
	}
}
