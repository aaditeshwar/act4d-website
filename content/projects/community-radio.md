# Technologies for community radio

**Faculty:** [Aaditeshwar Seth](https://www.cse.iitd.ac.in/~aseth/)

**Collaborators:** [The Gram Vaani team](http://gramvaani.org/about/team/)

**Students:** [Zahir Koradia](http://www.cse.iitb.ac.in/~zahirk/)

**Projects:** Community radio stations are short-range radio stations engaged in the production and broadcast of locally relevant information. Since there are no standardized technologies for running radio stations, they use an ad-hoc mix of software and hardware for broadcast. We have designed and deployed a new automation system for community radio called the [Gramin Radio Inter Networking System](http://gramvaani.org/news/software/) that enables a rich set of features for CR stations at very low hardware costs. Some specific research challenges we are addressing include the following:

- **Good audio performance on commodity hardware:** We have been able to overload a commodity single-board-computer with multiple sound cards to handle playout, archiving, and monitoring of broadcasts. This is also coupled with telephony services where the radio station can receive phone calls, archive them, and send them out on broadcast.
- **Service oriented robust architecture:** To keep our setup flexible, we have divided the functionality of radio automation into multiple services. These services can run off a single machine or even multiple machines, depending upon the scalability requirements of the radio station. A robust messaging framework is used so that even if one service fails, it does not effect the functioning of other services.
- **Local repair:** Radio stations have a complicated setup with many audio and network connections between computers, mixers, and other audio devices. We recognized early on that the system had to be robust and locally repairable, because it would not be sustainable for technicians to travel from cities to far flung villages just to solve some minor connection or cable fault. We are therefore building a diagnostics tools that uses DSP to identify the fault location, and guides the local radio station operator in a step by step manner to repair the problem himself if possible.
- **Deriving logically consistent radio station setups:** Since our system can be deployed off multiple machines, this means that audio connections and devices need to be laid out across many hardware elements. We are using Prolog to formally express a radio station configuration. Given a desired setup such as the number of machines, the kind of mixer, the kind of mic, etc, an inference engine will derive the various connections and audio devices that need to be available on different machines. **Achal Premi** is working on this problem.
- **Log shipping and remote upgrades:** Since many radio stations may not have Internet access, we are using the [VLink technology](http://blizzard.cs.uwaterloo.ca/tetherless/index.php/VLink) developed at the University of Waterloo to transfer system logs from the radio stations to the Internet. We then analyse the logs to detect any errors or bugs, and send back upgrades through VLink in the reverse direction. These upgrades can get automatically installed on the radio stations.

**Publications:**

[Gurgaon idol: a singing competition over community radio and IVRS](http://www.cse.iitd.ernet.in/~aseth/gurgaonidol.pdf) - Z. Koradia, P. Aggarwal, G. Luthra, and A. Seth. **ACM DEV (3), 2013**

[Experiences of Deploying and Commercializing a Community Radio Automation System in India](http://www.cse.iitd.ernet.in/~aseth/grins-scaling.pdf) - Z. Koradia, Balachandran C, K. Dadheech, M. Shivam, and A. Seth. **ACM DEV, 2012**

[Phonepeti: Exploring the Role of an Answering Machine System in a Community Radio Station in India](http://www.cse.iitd.ernet.in/~aseth/phonepeti.pdf) - Z. Koradia and A. Seth. **ICTD 2012 (poster)**

[Using ICTs to Meet the Operational Needs of Community Radio Stations in India](http://www.cse.iitd.ernet.in/~aseth/grinsdevict.pdf) - Z. Koradia, A. Premi, B. Chandrasekharan, and A. Seth. **ACM DEV, 2010**
