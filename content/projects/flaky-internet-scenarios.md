# Overcoming poor Internet connectivity scenarios in rural areas

**Faculty:** [Aaditeshwar Seth](https://www.cse.iitd.ac.in/~aseth/), [Huzur Saran](https://www.cse.iitd.ac.in/~saran), [Sanjiva Prasad](https://www.cse.iitd.ac.in/~sanjiva)

**Collaborators:** [The Gram Vaani team](http://gramvaani.org/about/team/)

**Students:** Ishani Ahuja, [Zahir Koradia](http://www.cse.iitb.ac.in/~zahirk/), Deepak Martin, Arvind Mahla, Sandeep Kumar Gupta, Sidharth Telang, Rohit Agarwal

**Projects:** The common usecase of Web applications has changed -- from point to point communication, the focus is now on content sharing and interacting around content. We call this a **conversation centric design**, where users engage in asynchronous conversations with each other by posting content, giving comments about the content, adding more content, etc. We are building an overlay network architecture to optimize the network for this common usecase of conversation centric applications.

The same phenomenon is also underway in rural areas. With systems like [community radio](#/community-radio) and [Spoken Web](https://act4d.iitd.ac.in/act4d/index.php?option=com_content&view=article&id=16&Itemid=24), content generation rates in rural areas are likely to increase, and conversational models will help spur social media even in these settings.

In our model, the network provides high-level services to be able to publish conversations, subscribe to updates about conversations, cache and replicate popular content objects bringing them closer to the edge, content lookup, content routing over delay tolerant networks, etc. The vision is for the network to offer a higher abstraction to applications so that applications need not be worry about caching or content lookups, but the network will optimally reorganize itself to deliver good performance. We are addressing a number of problems in this area:

- **Architecture:** Upon treating conversations as the fundamental entity of communication, the network architecture needs to change to accommodate services for conversation search, lookup, pull, push, etc.
- **Social network information:** Modeling conversations essentially implies that not only are we establishing links across content objects, but also between content objects and users who created the objects or are referenced in the objects. This requires integration with online social networks such as Facebook to fetch the list of friends of users, and then use the list to design distributed gossip algorithms.
- **Content caching and replication:** Caching and replication in the network can be improved by using information diffusion models.
- **Delay tolerant communication models:** We plan to use USB keys to distribute content across villages. This requires a different communication model than the always connected Internet graph.
- **Dynamic subscriber lists:** To send notifications about conversation updates to users requires multicast graphs maintained in a robust manner even as users join or lose interest in the conversation.

<img src="images/networkeddclowres.png" alt="Network architecture" class="img-75">

Eventually, we envision that our systems for [community radio](#/community-radio) and [Spoken Web](https://act4d.iitd.ac.in/act4d/index.php?option=com_content&view=article&id=16&Itemid=24) will all be endpoint applications that are connected using the content distribution network. More such conversational applications are listed [here](https://act4d.iitd.ac.in/act4d/index.php?option=com_content&view=article&id=21&Itemid=29).

**Publications:**

[A comprehensive data management framework for opportunistic communication on mobile phones](http://www.cse.iitd.ernet.in/~aseth/opportunistic_communication.pdf) - S. Doraswamy, A. Subramaniam, and A. Seth. **ACM DEV (3), 2013 (poster)**

[Motivation and Design of a Content Distribution Architecture for Rural Areas](http://www.cse.iitd.ernet.in/~aseth/aseth-ruralcdn-v2.pdf) - A. Mahla, D. Martin, I. Ahuja, Q. Niyaz, and A. Seth. **ACM DEV, 2012** [[talk](http://www.cse.iitd.ernet.in/~aseth/rural-cdn-dev-2012.pdf)]

[Design and Implementation of the KioskNet System](http://www.cse.iitd.ernet.in/~aseth/kiosknetfinal.pdf) - S. Guo, M. Derakhshani, M.H. Falaki, U. Ismail, R. Luk, E.A. Oliver, S. Ur Rahman, A. Seth, M.A. Zaharia, and S. Keshav. **Computer Networks, 2011**

[Policy Oriented Architecture for Opportunistic Communication on Heterogeneous Wireless Networks](http://www.cse.iitd.ernet.in/~aseth/ocmp.pdf) - A. Seth, M. Zaharia, S. Bhattacharya, S. Keshav. **Manuscript, University of Waterloo, 2006**

[Low-cost Communication for Rural Internet Kiosks Using Mechanical Backhauls](http://www.cse.iitd.ernet.in/~aseth/ruralkiosks.pdf) - A. Seth, D. Kroeker, M. Zaharia, S. Guo, S. Keshav. **ACM MOBICOM, 2006**

[Practical Security for Disconnected Nodes](http://www.cse.iitd.ernet.in/~aseth/practical_security.pdf) - A. Seth, S. Keshav. **ICNP Workshop on Secure Network Protocols (NPSec), 2005**. A [newer version](http://www.cse.iitd.ernet.in/~aseth/practical_security_v2.pdf) is available too, co-authored with U. Hengartner.
