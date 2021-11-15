public class subarray {
    public static void main(String[] args) {
        int arr[] = {5,-1,2,-6,7,-2};
        int i,sum=0,max=-100;
        for(i=0;i<arr.length;i++)
        {
            sum+= arr[i];
            if(sum<0)
            {
                sum=0;
            }
            if (sum>max) {
                max=sum;
                
            }
            
        }
        System.out.println("The max in the sub array is "+max);
    }    
}
