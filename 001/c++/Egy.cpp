#include <iostream>

using namespace std;

int main()
{	
	int sum = 0;
	int n = 1002/3;
	cout << n << " " <<(n*(n-1))/2 << endl;
	sum +=(3*n*(n-1))/2;
	n = 1000/5;
	cout << n << " " <<(n*(n-1))/2 << endl;
	sum+=(5*n*(n-1))/2;
	n=1005/15;
	sum -=(15*n*(n-1))/2;
	cout << sum;
	
    return 0;
}
