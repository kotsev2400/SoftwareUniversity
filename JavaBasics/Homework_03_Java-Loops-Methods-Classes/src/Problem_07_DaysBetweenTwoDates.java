import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Scanner;

public class Problem_07_DaysBetweenTwoDates {
	public static void main(String[] args) throws ParseException {

		Scanner scan = new Scanner(System.in);
		String inputStart = scan.nextLine();
		String inputEnd = scan.nextLine();

		SimpleDateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy");

		String startDate = inputStart;
		String endDate = inputEnd;
		Date start = dateFormat.parse(startDate);
		Date end = dateFormat.parse(endDate);

		long difference = end.getTime() - start.getTime();

		long days = difference / (24 * 60 * 60 * 1000);
		System.out.println(days);
	}
}
