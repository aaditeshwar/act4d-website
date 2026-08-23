# CSL 867, Fall 2012: High Speed Networks -- Optimizing the Internet Edge

This is a seminar course. We will study three broad topics of current research:

- How scheduling, flow/congestion control, and buffer sizes at the edge routers affect performance. We will begin with examining some classic literature on scheduling and congestion control, TCP variants, etc, then move on to measurement studies at edge networks, study the roles of scheduling policies on 2G/3G networks, and several new proposals on transport layer variations.
- Changes in the Internet structure and new architecture. We will start with several measurement studies on the changing nature of web traffic, mobile Internet usage, etc, then study papers which describe structural changes in the Internet over the last decade or so, and move on to architectural responses underlying these structural changes such as the growth of CDNs and P2P networks. We will also closely examine some new topics in data center networking, content based networks, and proposals for new networking APIs.
- Large scale data processing. Data centers now regularly process computations on large graphs, store huge amounts of data, and have to respond with millisecond latencies. We will study frameworks such as map-reduce, key-value stores, and how they are implemented in Google/Facebook/Twitter like networks.
- Time permitting, we will also look at other interesting topics such as the design of faster switches, load balanced routing, wireless networks, and security issues.

Depending on the class size, each student will present 3-4 papers during the course, take the lead in rebutting an equal number of papers presented by other students, and write reviews on all papers discussed in class. Students will also do projects in groups of 2-3 team members. Grading will be based on the following criteria:

- Project
- Quality of presentations and rebuttals [[Choose your presentations and rebuttal papers](https://docs.google.com/spreadsheet/ccc?key=0AjIcF7WCjuEvdHE4T0p3SDdJZGJ4dUlDQ0FMZm5DaHc)]
- Quality of reviews [copy paste the URL: http://10.22.4.33/csl867/ or http://www.cse.iitd.ernet.in/act4dreview/]
- Attendance and class participation

**Class timings:**Mondays and Thursdays 3:30-5:00pm, in the committee room (425, Bharti building)

**Reference **

- [How to read a paper](http://blizzard.cs.uwaterloo.ca/keshav/home/Papers/data/07/paper-reading.pdf)
- [How to give a research talk](http://blizzard.cs.uwaterloo.ca/keshav/mediawiki-1.4.7/index.php/Giving_and_attending_talks)
- [Doing GREAT research](http://blizzard.cs.uwaterloo.ca/keshav/mediawiki-1.4.7/index.php/Hints_on_doing_research)
- How to review a paper: No paper is perfect! Think in terms of high/medium/low level points you want to raise. High level points mostly relate to the assumptions or validity of the context in which the paper is based. Has the paper identified the right problem to solve? Is the approach valid? Medium level points relate to the methodology. Any gaping holes in the work? What parts are missing, not validated? Low level points relate to better graphs that could be plotted, better explanation, better structuring, etc. The exact opposite goes for strengths of the paper -- what high/medium/low level points did you really appreciate.

**Topic 1: Scheduling and flow control**

History

- [P01] RED gateways for congestion avoidance. Floyd and Jacobson, TON 1993 [[Link]](http://dl.acm.org/citation.cfm?id=169935). [Optional] RED in a different light[](http://www.cnaf.infn.it/~ferrari/papers/ispn/red_light_9_30.pdf). Jacobson, 1999 [[Link]](http://www.cnaf.infn.it/%7Eferrari/papers/ispn/red_light_9_30.pdf)
- [P01] Simulation based comparison of Tahoe, Reno, and SACK TCP. Fall and Floyd [[Link]](http://dl.acm.org/citation.cfm?id=235162)
- [P02] Analysis and simulation of a fair queueing algorithm. Demers, Keshav, and Shenker, Sigcomm 1990 [[Link]](http://dl.acm.org/citation.cfm?id=75248)
- [P02] Efficient fair queueing using DRR. Shreedhar and Varghese, TON 1996 [[Link]](http://dl.acm.org/citation.cfm?id=217453)

Implication of gateway buffer sizes, traffic shaping, NAT, etc

- [P03] Bufferbloat. Cerf, Jacobson, Weaver, and Gettys, CCR 2012 [[Link]](http://queue.acm.org/detail.cfm?id=2076798). Controlling queue delay. Nichols and Jacobson, ACM Queue 2012 [[Link]](http://queue.acm.org/detail.cfm?id=2209336)
- [P03] Netalyser: Illuminating the edge network. Paxson, IMC 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1879173)
- [P04] Characterizing residential broadband networks. Dischinger, IMC 2007 [[Link]](https://act4d.iitd.ac.in/act4d/dl.acm.org/citation.cfm?id=1298313)
- [P04] Broadband Internet performance: A view from the gateway. Sundaresan, Teixeira, and Feamster, Sigcomm 2011[[Link]](http://dl.acm.org/citation.cfm?id=2018452)
- [P05] An untold story of middleboxes in cellular networks. Zhang, Sigcomm 2011[[Link]](http://dl.acm.org/citation.cfm?id=2018479)
- [P05] Detecting traffic differentiation in backbone ISPs with Netpolice. Zhang, IMC 2009 [[Link]](http://dl.acm.org/citation.cfm?id=1644893.1644905&coll=portal&dl=ACM&type=series&idx=SERIES10693&part=series&WantType=Proceedings&title=IMC)

Cellular networks

- [P06] Practical experience with TCP over GPRS. Crowcroft, Globecom 2002 [[Link]](http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.19.5297). [Optional] A GPRS testbed for TCP measurements. Wennstrom [[Link]](http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=1045745&tag=1)
- [P06] A large-scale, passive analysis of e2e TCP performance over GPRS. Veres, Infocom 2004 [[Link]](http://www.ericsson.com/res/thecompany/docs/journal_conference_papers/packet_technologies/large_scale.pdf)
- [P07] Characterizing radio resource allocation for 3G networks. Qian, IMC 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1879159). [Optional] Performance of scheduling algorithms for HSDPA. Wang [[Link]](http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=4469566)
- [P07] TCP/IP performance over 3G wireless links with rate and delay variation. Chan, Mobicom 2002 [[Link]](http://dl.acm.org/citation.cfm?id=570655)

TCP variants

- [P08] An argument for increasing TCP's initial congestion window. Google [[Link]](http://dl.acm.org/citation.cfm?id=1823848)
- [P08] Design, implementation and evaluation of congestion control for multipath TCP. Wischik, NSDI 2012 [[Link]](http://dl.acm.org/citation.cfm?id=1972457.1972468)
- [P09] Proportional rate reduction for TCP. Google, IMC 2011[[Link]](http://dl.acm.org/citation.cfm?id=2068832)
- [P09] Is it still possible to extend TCP. Honda, IMC 2011[[Link]](http://dl.acm.org/citation.cfm?id=2068834)

**Topic 2: Internet architecture **

The original ideas

- [P10] The design philosophy of the DARPA Internet protocols. Clark, Sigcomm 1988 [[Link]](http://dl.acm.org/citation.cfm?id=52336)

Recent changes and usage behavior

- [P10] Towards understanding modern web traffic. Pai, IMC 2011 [[Link]](http://dl.acm.org/citation.cfm?id=2068816.2068845). [Optional] On the characteristics and reasons of long-lived Internet flows. Heidmann, IMC 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1879198)
- [P11] Network level footprints of facebook applications. Krishnamurthy, IMC 2009 [[Link]](http://dl.acm.org/citation.cfm?id=1644901)
- [P11] Identifying diverse usage behaviors of smartphone apps. Venkataraman, IMC 2011[[Link]](http://dl.acm.org/citation.cfm?id=2068847)
- [P12] YouTube everywhere: Impact of device and infrastructure synergies on user experience. Rao, IMC 2011[[Link]](http://dl.acm.org/citation.cfm?id=2068849)
- [P12] Internet inter-domain traffic. Labovitz, Sigcomm 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1851194). [Optional] Ten years in the evolution of the Internet ecosystem. Dovrolis, IMC 2008 [[Link]](http://dl.acm.org/citation.cfm?id=1452520.1452543)

Architectural responses

[P2P]

- [P13] Measurement, modeling, and analysis of a peer-to-peer file sharing workload. Gummadi, SOSP 2003 [[Link]](http://dl.acm.org/citation.cfm?id=945475)
- [P13] On blind mice and the elephant. Siganos, Sigcomm 2011[[Link]](http://dl.acm.org/citation.cfm?id=2018450). [Optional] Characterizing the global impact of P2P overlays on the AS-level underlay. Willinger [[Link]](http://dl.acm.org/citation.cfm?id=1889325)
- [P14] Xunlei: Peer-assisted download acceleration on a massive scale. Hei [[Link]](http://link.springer.com/chapter/10.1007/978-3-642-28537-0_23?null)
- [P14] Pitfalls in ISP friendly P2P design. Anderson, Hotnets 2009 [[Link]](http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.147.6834)

[Transport]

- [P15] HTTP as the narrow waist of the future Internet. Stoica, Hotnets 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1868453)
- [P15] Characterizing the role of front-end servers in e2e performance of dynamic content distribution. Zhang, IMC 2011 [[Link]](http://www-users.cs.umn.edu/~yingying/papers/imc77-chenPS.pdf). [Optional] Understanding website complexity: Measurements, Metrics, and Implications. Sekar, IMC 2011 [[Link]](http://dl.acm.org/citation.cfm?id=2068846)

[CDNs]

- [P16] Experiences with coralCDN: A five-year operational view. Freedman [[Link]](http://dl.acm.org/citation.cfm?id=1855718)
- [P16] YouTube traffic dynamics and its interplay with a Tier-1 ISP: An ISP perspective. Zhang, IMC 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1879197). [Optional] On the feasibility of prefetching and caching for online TV services: A measurement study on Hulu. Zink, PAM [[Link]](http://dl.acm.org/citation.cfm?id=1987518)
- [P17] Antfarm: Efficient content distribution with managed swarms. Sirer, NSDI 2009 [[Link]](http://dl.acm.org/citation.cfm?id=1558985). [Optional] A content propagation metric for efficient content distribution. Sirer, SIGCOMM 2011 [[Link]](http://dl.acm.org/citation.cfm?id=2018474)
- [P17] Cellular data network infrastructure characterization and implication on mobile content placement. Mao, Sigmetrics 2011[[Link]](http://dl.acm.org/citation.cfm?id=1993777)

[Content based networks]

- [P18] Networking named content. Jacobson, CoNEXT 2009 [[Link]](http://dl.acm.org/citation.cfm?id=1658941)
- [P18] LIPSIN: Line speed publish/subscribe inter-networking. Nikander, SIGCOMM 2009 [[Link]](http://dl.acm.org/citation.cfm?id=1592592)
- [P19] Information centric networking: Seeing the forest for the trees. Wilcox, Hotnets 2011 [[Link]](http://dl.acm.org/citation.cfm?id=2070563)

[Data center networks]

- [P19] A guided tour of data center networking. Felderman, CCR 2012 [[Link]](http://queue.acm.org/detail.cfm?id=2208919)
- [P20] ICTCP: Incast congestion control for TCP in data center networks. Zhang, CoNEXT 2010 [[Link]](http://dl.acm.org/citation.cfm?id=1921186). [Optional] Improving datacenter performance and robustness with multipath TCP. Handley, Sigcomm 2011 [[Link]](http://dl.acm.org/citation.cfm?id=2018467)
- [P20] The TCP outcast problem: Exposing unfairness in data center networks. Kompella [[Link]](http://dl.acm.org/citation.cfm?id=2228339)

Rewriting stacks

- [P21] Revisiting network I/O APIs: The Netmap framework. Rizzo, CCR 2012 [[Link]](http://queue.acm.org/detail.cfm?id=2103536)
- [P21] Serval: An end-host stack for service-centric networking. Freedman [[Link]](https://act4d.iitd.ac.in/act4d/sns.cs.princeton.edu/docs/serval-tr11.pdf)

**Topic 3: Processing of large data **

TBD

**Project ideas **

You are by no means required to choose from this list. These are just ideas to get you thinking:

- Most smartphones do not expose a network library to send raw IP packets. Applications are only allowed to send TCP and UDP packets without being able to modify TTL fields, MSS advertisements, etc, or send ICMP packets. Android supports a native application development environment that can expose this functionality. Write your own network IO library in Android that can expose a richer API to applications.
- Root an Android phone and install tcpdump on it. Then collect traces on 3G for web browsing, Gmail application, Facebook application, etc, to study application specific traffic patterns. Analyze the results to understand network characteristics such as delays and loss rates, retransmissions, time spent in TCP slow-start, timeouts, etc, and think about what protocol modifications would make sense to perform better on 3G connection profiles.
- Use a user-level TCP stack such as [Daytona](http://nms.lcs.mit.edu/%7Ekandula/data/daytona.pdf) or various TCP implementations on UDP to exactly understand what happens inside the TCP stack during a connection on 3G or broadband networks. Modify the stack to see if you can get a better performance. Are your modifications friendly to other non-modified TCP connections?
- Write a detailed survey paper on what scheduling policies are used in 2G and 3G networks, especially those in India including GPRS, HSDPA, 1xRTT, EvDO, EDGE, etc. The survey should help explain what delays and bandwidth allocation policies would arise as a result of these scheduling policies, and how would performance be effected in the presence of different competing traffic patterns. Also identify various measurement studies done on cellular data networks and explain their results using your knowledge of scheduling policies. Remember that a survey paper is not summarizing different papers or books you have read, but about situating them in a common framework to explain them relative to each other in context of the framework. For an idea, take a look at some good survey papers on [location management](http://netarchlab.tsinghua.edu.cn/PersonalMainPage/xlz/public_html/resources/a_survey_of_mobility.pdf) and [network applications of bloom filters](http://www.cs.utexas.edu/%7Eyzhang/teaching/cs386m-f8/Readings/im2005b.pdf).
- Study scheduling policies in use in 3G and broadband networks, and observe them in operation by setting up multiple transfers in parallel. Do the observed results tally with documentation about these policies?
- Run various edge network profiling tools such as Shaperprobe, Bufferbloat, Netalyser, Glasnost, etc, from within the IIT network, from 3G connections, and from your home broadband network, to find out permitted burst sizes, delays, delay under load, etc. Find out what factors are responsible for the differences observed in results over these different networks.
- Find out which simulators such as NS-2 or Opnet support 2G/3G/broadband connection profiles, and then simulate traffic on these simulators. Simulate different scenarios classified based on the traffic pattern, load, etc. Observe deviations in simulation results from real-world observations cited in different papers and by your colleagues doing measurements related projects. Alter the simulators to adjust buffer sizes, scheduling policies, etc, so that simulations agree more closely with observed results under the different scenarios you simulated.
