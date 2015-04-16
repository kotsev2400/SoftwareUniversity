import java.util.Scanner;


public class Problem_02_TriangleArea {
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int aX = input.nextInt();
		int aY = input.nextInt();
		int bX = input.nextInt();
		int bY = input.nextInt();
		int cX = input.nextInt();
		int cY = input.nextInt();
		
		double sideA = Math.sqrt((bX - aX) * (bX - aX) + (bY - aY) * (bY - aY));
		double sideB = Math.sqrt((cX - bX) * (cX - bX) + (cY - bY) * (cY - bY)); 
		double sideC = Math.sqrt((aX - cX) * (aX - cX) + (aY - cY) * (aY - cY));
		
		if ((sideA + sideB > sideC) && (sideB + sideC > sideA) && (sideA + sideC > sideB))
		{
			double p = (sideA + sideB + sideC) / 2;
			double area = Math.sqrt(p * (p - sideA) * (p - sideB) * (p - sideC));
			System.out.println((int) area);
		}
		else
		{
			System.out.println(0);
		}
	}
}
