import java.util.*;
public class GoldMine {
  public static void main(String []args){
    int [][]mine={{3,4,5,6,7},
                  {1,2,3,4,5}, //mine[i][j] i=индекс строк(по игрку) j=индекс колонн(по х)
                  {9,4,13,32,0},
                  {4,12,3,19,2}
                };
    for(int j=1;j<5;j++){
      for(int i=0;i<4;i++){
        if(i==0){
          mine[i][j]=Math.max(mine[i][j-1],mine[i+1][j-1])+mine[i][j];
        }
        else if(i!=0 && i!=3){
          mine[i][j]=Math.max(Math.max(mine[i][j-1],mine[i+1][j-1]),mine[i-1][j-1])+mine[i][j];
        }
        else if(i==3){
          mine[i][j]=Math.max(mine[i-1][j-1],mine[i][j-1])+mine[i][j];
        }
      }

    }
    for(int i=0;i<4;i++){
      System.out.println();
      for(int j=0;j<5;j++){
        System.out.print(mine[i][j]+" ");
      }
      }
      System.out.println();
      int max=0;
      for(int i=0;i<4;i++){
        for(int j=0;j<5;j++){
          if(mine[i][j]>=max){
            max=mine[i][j];
          }
        }
      }
    System.out.println("Maximum amount of gold is —»> "+max);
    }
}
