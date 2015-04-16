import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class Problem_07_CountSubstringOccurrences {
	public static void main(String[] args) {
		
		Scanner scan = new Scanner(System.in);
		
		String text = scan.nextLine().toLowerCase();
		String searchStr = scan.nextLine().toLowerCase();
		
		Pattern stringPattern = Pattern.compile(searchStr);
		Matcher matcher = stringPattern.matcher(text);
		
		int count = 0;
		
		while (matcher.find()) {
			count++;
			int firstIndex = matcher.start();
			matcher.region(firstIndex + 1, text.length());
		}
		
		System.out.println(count);
	}
}
