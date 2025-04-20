//This program will get (user input) and print/display the customer information
#include <iostream>
#include <string>
using namespace std;

int main()
{
    //variable declaration
    string pn_name, pn_order,pn_price, pn_pquantity;
    

    cout <<"***********************"<< endl;
    cout <<" THE FIFTH AVENUE " <<endl;
    cout <<"***********************"<<endl;
    
    cout <<"CUSTOMERS NAME:" <<endl;
    cin >> pn_name;
    cout <<"PRODUCT ORDER:" <<endl;
    cin >> pn_order;
    cout <<"PRODUCT PRIZE:" <<endl;
    cin >> pn_price;
    cout <<"PRODUCT QUANTITY:" <<endl;
    cin >> pn_pquantity;
   
  
     cout <<"----------------------------------------" <<endl;
     cout <<"TOTAL PURCHASE" <<endl;
     cout <<"----------------------------------------" <<endl;
     
     cout <<"CUSTOMERS NAME:" <<pn_name<< endl <<"PRODUCT ORDER:" <<pn_order<< endl <<"PRODUCT PRIZE:" <<pn_price<< endl <<"PRODUCT QUANTITY:" << pn_pquantity <<endl;
     
     cout <<"••••••••••••••••••••••••••••••" <<endl;
   
     return 0;
    }