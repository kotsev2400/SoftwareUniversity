import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class Problem_08_ExtractEmails {
	public static void main(String[] args) {
		
		Scanner scan = new Scanner(System.in);
		
		String text = scan.nextLine().toLowerCase();
		String emailCheck = "[\\w|.|-]*@\\w*\\.[\\w|.]*";
		
		Pattern emailPattern = Pattern.compile(emailCheck);
		Matcher matcher = emailPattern.matcher(text);
		
		while (matcher.find()) {
			System.out.print(matcher.group() + "\n");
		}
	}
}
