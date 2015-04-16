import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class Problem_01_SortArrayOfNumbers {
	public static void main(String[] args) {

		ArrayList<Integer> numbersArr = new ArrayList<>();
		Scanner scan = new Scanner(System.in);
		int n = scan.nextInt();

		for (int i = 0; i < n; i++) {
			int number = scan.nextInt();
			numbersArr.add(number);
		}
		
		Collections.sort(numbersArr);
		
		for (Integer integer : numbersArr) {
			System.out.print(integer + " ");
		}
	}
}
