public class Egy{

	public static void main(String[] args){
		int sum = 0;
		for(int i=0;i<1000;i+=3){
			sum+=i;
		}
		for(int i=0;i<1000;i+=5){
			if(i%3!=0) sum+=i;
		}
		
		System.out.println(sum);
	}

}
