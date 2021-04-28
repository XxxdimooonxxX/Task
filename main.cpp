#include <iostream>
#include <string>
#include <fstream>

using namespace std;

int main(){
    ifstream fInput("input.txt");
    
    string mainStr;
    while(getline(fInput, mainStr)){
        cout << mainStr;
    }
    
    fInput.close();//close file
    ////////////////////////////////////////////////////////////////////
    ofstream fOutput("output.txt");
    int fin = 0;
    string arr[2] = {"", ""};
    //deleted ' '
    for(int i = 0; i < mainStr.length(); i++){
        if(mainStr[i] == ' '){
            int j = 0;//1 slovo
            while(j < i){
                arr[0] += mainStr[j];
                j++;
            }
            int k = i + 1;//2 slovo
            while(k < mainStr.length()){
                arr[1] += mainStr[k];
                k++;
            }
            break;
        }
    }
    //int. to str.
    fin = stoi(arr[0]) + stoi(arr[1]);
    
    fOutput << fin;
    fOutput.close();

    return 1;
}
