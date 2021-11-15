import java.util.*;
class rainwater
{
    public static void main(String[] args) {
        int arr[]={5,3,2,0,2,3};
        // System.out.println(arr.length);
        int lr[]=new int[arr.length], rl[]=new int[arr.length];
        //pre-prossing stage
        int i,max=-100;
        for (i = 0; i < arr.length; i++) {
            if(arr[i]>max)
            {
                max=arr[i];
            }
            lr[i]= max;
        }
        max=-100;
        for (i = arr.length-1; i >=0; i--) {
            if(arr[i]>max)
            {
                max=arr[i];
            }
            rl[i]= max;
        }
        //pre-prossed array ko print
    //     for (int j = 0; j < lr.length; j++) {
    //             System.out.print(lr[j]+", ");
    //     }
    //     System.out.println();
    //     for (int j = 0; j < lr.length; j++) {
    //         System.out.print(rl[j]+", ");
    // }
    //min(lr[i],rl[i])-arr[i];
    int sum = 0;
    for (int j = 0; j < arr.length; j++) {
        sum+= Math.min(lr[j], rl[j])-arr[j];
    }
    System.out.println("The total block of water are "+sum);
    }
}