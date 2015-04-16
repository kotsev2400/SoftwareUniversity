import java.util.Arrays;
import java.util.Scanner;

public class Problem_05_SortArrayOfStrings {
	public static void main(String[] args) {

		Scanner input = new Scanner(System.in);
		
		int count = input.nextInt();
		String towns[] = new String[count];
		
		for (int i = 0; i < count; i++) {
			towns[i] = input.next();
		}

		Arrays.sort(towns);

		int number = 1;
		for (String town : towns) {
			System.out.println(number++ + "." + town);
		}
	}
}
