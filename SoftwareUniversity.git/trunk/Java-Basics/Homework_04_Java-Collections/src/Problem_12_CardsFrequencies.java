import java.util.HashMap;
import java.util.LinkedHashMap;
import java.util.Map;
import java.util.Scanner;

public class Problem_12_CardsFrequencies {
	public static void main(String[] args) {
		
		Scanner scan = new Scanner(System.in);
		String[] inputCards = scan.nextLine().split("\\W+");
		
		HashMap<String, Integer> cards = new LinkedHashMap<>();
		double finalCount = 0;
		
		for (String card : inputCards) {
			  Integer count = cards.get(card);
			  if (count == null) {
			    count = 0; 
			  }
			  cards.put(card, count+1);
			  finalCount++;
		}
		
		for (Map.Entry<String, Integer> cardsValue : cards.entrySet()) {
			double percentage = ((double)cardsValue.getValue() / finalCount) * 100;
			System.out.printf("%s -> %.2f%n",cardsValue.getKey(),percentage);	
		}
	}
}
