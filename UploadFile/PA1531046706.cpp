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

void read()
{
    cin>>n>>m;
    cin>>l1.r>>l1.c>>l2.r>>l2.c;
    for (int i=1; i<=n; i++)
    {
        for (int j=1; j<=m; j++)
        {
            cin>>map[i][j];
        }
    }
    cin>>blinky.r>>blinky.c;
    cin>>pinky.r>>pinky.c;
    cin>>inky.r>>inky.c;
    cin>>clyde.r>>clyde.c;
    cin>>pacman.r>>pacman.c;
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

int isMa(int rm, int cm)
{
	if ((blinky.r == rm && blinky.c==cm) || (pinky.r == rm && pinky.c==cm) || (inky.r == rm && inky.c==cm) || (clyde.r == rm && clyde.c==cm))
		return 1;
	return 0;
}

data pre[102][102];
int dem[102][102];
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
			if (inside(rm, cm)==1 && check[rm][cm]==0 && map[rm][cm]!='#' && isMa(rm, cm)==0)
			{
				data tmp;
				tmp.r = rm;
				tmp.c = cm;
				q.push(tmp);
				check[rm][cm]=1;
				pre[rm][cm] = f;
				dem[rm][cm]=dem[f.r][f.c] + 1;
			}
		}
		if (f.r==l1.r && f.c==l1.c && check[l2.r][l2.c]==0 && isMa(l2.r, l2.c)==0)
		{
			q.push(l2);
			check[l2.r][l2.c]=1;
			pre[l2.r][l2.c] = f;
			dem[l2.r][l2.c]=dem[f.r][f.c] + 1;
		}
		else if (f.r==l2.r&&f.c==l2.c && check[l1.r][l1.c]==0 && isMa(l1.r, l1.c)==0)
		{
			q.push(l1);
			check[l1.r][l1.c]=1;
			pre[l1.r][l1.c] = f;
			dem[l1.r][l1.c]=dem[f.r][f.c] + 1;
		}
	}
}

data truyvet(data x)
{
	data tmp = x;
	data bf = pre[x.r][x.c];
	while (bf.r!=pacman.r || bf.c!=pacman.c)
	{
		tmp = bf;
		bf = pre[bf.r][bf.c];
	}
	return tmp;
}


int main ()
{
//	while (1);
    srand(time(NULL));
    read();
    BFS(pacman);
    int minL = 900;
    data tmp;
    for (int i=1; i<=n; i++)
    {
    	int f=0;
    	for (int j=1; j<=m; j++)
    	{
    		if (map[i][j]=='.')
    		{
    			if (dem[i][j]<minL && dem[i][j]!=0)
    			{
    				minL = dem[i][j];
    				tmp.r = i;
	    			tmp.c = j;
				}
			}
		}
	}
	pacman = truyvet(tmp);
	int x = rand()%10;
//    if (x<3) cout<<pacman.r<<" "<<pacman.c-1;
    cout<<pacman.r<<" "<<pacman.c;
    return 0;
}
