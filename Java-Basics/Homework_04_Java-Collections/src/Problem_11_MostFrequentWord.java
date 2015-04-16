import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class Problem_11_MostFrequentWord {
	public static void main(String[] args) {

		Scanner scan = new Scanner(System.in);

		String[] words = scan.nextLine().toLowerCase().split("\\W+");

		Map<String, Integer> wordsCount = new TreeMap<>();

		for (String word : words) {
			Integer count = wordsCount.get(word);
			if (count == null) {
				count = 0;
			}
			wordsCount.put(word, count + 1);
		}
		
		int biggestCount = 0;
		for (Integer value : wordsCount.values()) {
			if (biggestCount < value) {
				biggestCount = value;
			}
		}
		
		for (Map.Entry<String, Integer> wordsValue : wordsCount.entrySet()) {
			if (wordsValue.getValue() == biggestCount) {
				System.out.println(wordsValue.getKey() + " -> " + wordsValue.getValue());
			}
		}
	}
}
