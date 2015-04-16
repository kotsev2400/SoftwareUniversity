import java.util.Scanner;


public class Problem_06_CountSpecifiedWord {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		String text = scan.nextLine().toLowerCase();
		String[] textArr = text.split("\\W+");
		String searchWord = scan.nextLine().toLowerCase();
		
		int count = 0;
		
		for (int i = 0; i < textArr.length; i++) {
			if (searchWord.equals(textArr[i])) {
				count++;
			}
		}
		
		System.out.println(count);
	}
}
