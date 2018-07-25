#include <iostream>
#include <vector>
#include <stdlib.h>
#include <time.h>
#include <queue>
using namespace std;

struct data
{
    int r;
    int c;
};

int n, m;
data l1, l2;
char map[102][102];
data blinky;
data pinky;
data inky;
data clyde;
char status;
data pacman;
char Pre;
int bf;

void read()
{
    cin>>n>>m;
    cin>>l1.r>>l1.c>>l2.r>>l2.c;
//    cout<<l1.r<<" "<<l1.c<<" "<<l2.r<<" "<<l2.c<<endl;
    for (int i=1; i<=n; i++)
    {
        for (int j=1; j<=m; j++)
        {
            cin>>map[i][j];
//            cout<<map[i][j];
        }
//        cout<<endl;
    }
    cin>>blinky.r>>blinky.c;
//    cout<<blinky.r<<" "<<blinky.c<<endl;
    cin>>pinky.r>>pinky.c;
    cin>>inky.r>>inky.c;
    cin>>clyde.r>>clyde.c;
    cin>>status;
    if (status=='Y')
        cin>>pacman.r>>pacman.c;
    cin>>Pre;
    if (Pre=='Y')
    	cin>>bf>>pacman.r>>pacman.c;
}

int x_xq[]={+1, +0, -1, +0};
int y_xq[]={+0, -1, +0, +1};

int inside(int r, int c)
{
    if (r>=1 && r<=n && c>=1 && c<=m)
        return 1;
    return 0;
}

data Random(data Ma)
{
    vector <data> v;
    if (Ma.r==l1.r && Ma.c==l1.c)
        v.push_back(l2);
    else if (Ma.r==l2.r && Ma.c==l2.c)
        v.push_back(l1);
    
    for (int i=0; i<4; i++)
    {
        int i_m = Ma.r+y_xq[i];
        int j_m = Ma.c+x_xq[i];
        if (inside(i_m, j_m)==1)
        {
            if (map[i_m][j_m]!='#')
            {
                data tmp;
                tmp.r = i_m;
                tmp.c = j_m;
                v.push_back(tmp);
            }
        }
    }
    int x = rand()%v.size();
    return v[x];
}

data pre[102][102];
int check[102][102];
void BFS(data x)
{
	queue<data> q;
	q.push(x);
	check[x.r][x.c]=1;
	while (!q.empty())
	{
		data f = q.front();
		q.pop();
		for (int i=0; i<4; i++)
		{
			int rm = f.r+y_xq[i];
			int cm = f.c+x_xq[i];
			if (inside(rm, cm)==1 && check[rm][cm]==0 && map[rm][cm]!='#')
			{
				data tmp;
				tmp.r = rm;
				tmp.c = cm;
				q.push(tmp);
				check[rm][cm]=1;
				pre[rm][cm] = f;
			}
		}
		if (f.r==l1.r && f.c==l1.c && check[l2.r][l2.c]==0)
		{
			q.push(l2);
			check[l2.r][l2.c]=1;
			pre[l2.r][l2.c] = f;
		}
		else if (f.r==l2.r&&f.c==l2.c && check[l1.r][l1.c]==0)
		{
			q.push(l1);
			check[l1.r][l1.c]=1;
			pre[l1.r][l1.c] = f;
		}
	}
}

data truyvet(data x)
{
	data tmp = x;
	data bf = pre[x.r][x.c];
	while (bf.r!=pinky.r || bf.c!=pinky.c)
	{
		tmp = bf;
		bf = pre[bf.r][bf.c];
	}
	return tmp;
}

int main ()
{
    srand(time(NULL));
    read();
    BFS(pinky);
    blinky = Random(blinky);
    if (pinky.r==l1.r && pinky.c == l1.c) pinky = truyvet(l2);
    else pinky = truyvet(l1);
    inky = Random(inky);
    clyde = Random(clyde);
    cout<<blinky.r<<" "<<blinky.c<<endl;
    cout<<pinky.r<<" "<<pinky.c<<endl;
    cout<<inky.r<<" "<<inky.c<<endl;
    cout<<clyde.r<<" "<<clyde.c;
    return 0;
}
