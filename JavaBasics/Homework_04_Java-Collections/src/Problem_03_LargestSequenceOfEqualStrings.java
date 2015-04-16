import java.util.Scanner;

public class Problem_03_LargestSequenceOfEqualStrings {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		String[] words = scan.nextLine().split(" ");
		
		int count = 1;
		int biggestCount = 1;
		int key = 0;
		
		for (int i = 1; i < words.length; i++) {
			if (words[i].equals(words[i - 1])) {
				count++;
			} else {
				count = 1;
			}
			if (count > biggestCount) {
				biggestCount = count;
				key = i;
			}
		}
		for (int i = 0; i < biggestCount; i++) {
			System.out.print(words[key] + " ");
		}
	}
}
