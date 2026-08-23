# SIL 802, Winter 2017: Data Science for Development

As always, the world seems to be at the brink of disaster. Each day we read about pollution, climate change, corruption, inequality, exploitation... The world today is however a lot more instrumented than it ever was. Data from IoT sensors, satellite imagery, frequent surveys and censuses, market linkage through communication tools, social media, government MIS systems, etc can possibly all be pooled together to know about problems before it is too late, build models that could suggest solutions, and understand about what's happening in the world a bit better. We will look at various opportunities and challenges in data collection, curation, and analysis, in several different application areas. Students will work in groups and implement large data collection and analysis systems, or write termpapers on some specific topics.

The course will be structured along three tracks that will run pretty much in parallel:

- Thematic background required to be able to ask the right questions. This will include readings on poverty, development, inequality, industry structure, agriculture value chains, corruption, etc
- Data analysis methods. We will do a crash course starting from probability distribution, and go on to study the basics of hypothesis testing, linear and nonlinear regression, ANOVA, time series analysis with AR/MA models, and move on to the statistical machine learning methods with SVM/decision trees/KNN/bayes classifiers, unsupervised techniques for clustering/PCA/ICA, and spatiotemporal data analysis.
- Applications. We will look at a wide range of topics such as using mobile phone call records to estimate poverty, infer migration patterns, satellite data to map land use, social media data to understand unemployment issues, social network analysis of corporate and political networks, and much more.

All readings for the course have been uploaded to a dropbox folder, ask me for a link. Note that we won't study all the papers, but we will try to cover all the three aspects listed above from across the readings. Several project ideas are interspersed in the table, and some more are listed towards the end.

<table border="1">
<tbody>
<tr>
<td><strong>Development</strong></td>
<td></td>
<td>
<ul>
<li>Chapters from Jean Dreze and Amartya Sen, An Uncertain Glory: India and Its Contradictions</li>
<li>Chapters from Daryl Collins, et al, Portfolios of the Poor: How the World's Poor Live on $2 a Day</li>
<li>Chapters from Amartya Sen, Development as Freedom</li>
</ul>
</td>
</tr>
<tr>
<td rowspan="5"><strong>Poverty and inequality</strong></td>
<td>Theory</td>
<td>
<ul>
<li>Chapters from Thomas Piketty, Capital in the Twenty First Century</li>
<li>Wolfgang Streek, How Will Capitalism End</li>
</ul>
</td>
</tr>
<tr>
<td>Data from mobile phones</td>
<td>
<ul>
<li>Joshua Blumenstock..., Predicting Povery and Wealth from Mobile Phone Data</li>
<li><strong>Mini-project idea: </strong>Make a super strong presentation on what we can do with mobile CDR data, and we will take it to the Indian telecom providers. The Indian telcos have been very conservative in giving access to CDR records, but there are many examples from other parts of the world. </li>
</ul>
</td>
</tr>
<tr>
<td>Data from satellites</td>
<td>
<ul>
<li>Michael Xie..., Transfer Learning from Deep Features for Remote Sensing and Poverty Mapping</li>
<li>Yong Suk Lee..., International Isolation and Regional Inequality: Evidence from Sanctions on North Korea</li>
</ul>
</td>
</tr>
<tr>
<td>Mapping sociological patterns at smaller scales</td>
<td>
<ul>
<li>David Peters, Income Inequality across Micro and Meso Geographic Scales in the Midwestern United States</li>
<li>Joshua Blumenstock, Inferring Patterns of Internal Migration from Mobile Phone Call Records: Evidence from Rwanda</li>
</ul>
</td>
</tr>
<tr>
<td>More applications</td>
<td>
<ul>
<li>Kuch Varshney..., Targeting Villages for Rural Development Using Satellite Image Analysis</li>
<li>Brian Dillion, Using Mobile Phones to Collect Panel Data in Developing Countries</li>
<li><strong>Project idea: </strong>Use similar approaches to analyze Google Earth Engine data and see if the satellite data based analysis coincides with unit level census surveys. Census surveys are done every 10 years or so in India, but with satellite data we can then do much higher frequency assessments of poverty changes. It will be very interesting to also understand spatial correlation in poverty changes at different levels - villages/blocks/districts, and look at the spatial distribution of inequality at the village level. </li>
</ul>
</td>
</tr>
<tr>
<td rowspan="4">
<p><strong>Big corporate and political networks</strong></p>
</td>
<td>Theory</td>
<td>
<ul>
<li>Chapters from Joseph Stiglitz, The Price of Inequality</li>
<li>Chapters from Atul Kohli, Poverty Amid Plenty in the New India</li>
<li>Chapters from C. Wright Mills, The Power Elite</li>
</ul>
</td>
</tr>
<tr>
<td>Firm level analysis of political and corporate interlocks</td>
<td>
<ul>
<li>Mara Faccio, Politically Connected Firms</li>
<li>G. William Domhoff, Who Rules America: The Class-Domination Theory of Power</li>
<li>R. Narayanaswamy, Political Connections and Earnings Quality: Evidence from India</li>
<li>Asim Khwaja..., Do Lenders Favour Politically Connected Firms</li>
<li><strong>Project idea: </strong>Already underway, we are assembling a large graph of companies, company ownership, board members, politicians, bureaucrats, locations, etc, and analyzing the graph. </li>
</ul>
</td>
</tr>
<tr>
<td>Macro level analysis of political and corporate relationships</td>
<td>
<ul>
<li>R. Kavita Rao, Revenue Foregone Estimates: Some Analytical Issues</li>
<li><strong>Project idea: </strong>Build nice visualizations to understand national accounting - where is capital stored, how does it flow, from whom to whom... at a macro level</li>
</ul>
</td>
</tr>
<tr>
<td>Control in corporate networks</td>
<td>
<ul>
<li>Nick Godfrey, Why is Competition Important for Growth and Poverty Reduction</li>
<li>Dalhia Mani..., Moving Beyond Stylized Economic Network Models: The Hybrid World of the Indian Firm</li>
<li>Stefania Vitali..., The Network of Global Corporate Control</li>
<li>Bruce Kogut..., Restructuring or Disintegration of the German Corporate Network</li>
<li><strong>Project idea: </strong>Already underway, to understand the ownership structures and director interlocks among Indian companies. But we need access to historic data to also be able to trace network changes over time</li>
</ul>
</td>
</tr>
<tr>
<td>
<p><strong>Elections and local political networks</strong></p>
</td>
<td>Industries<br /></td>
<td>
<ul>
<li>Sandip Sukhtankar, Sweetening the Deal: Political Connections and Sugar Mills in India</li>
<li>Devesh Kapur..., Quid Pro Quo: Builders, Politicians, and Election Finance in India</li>
<li>Brian Min..., Electoral Cycles and Electricity Losses in India</li>
</ul>
</td>
</tr>
<tr>
<td rowspan="3">
<p><strong>Agriculture, manufacturing, and employment</strong></p>
</td>
<td>Agriculture patterns</td>
<td>
<ul>
<li>Using agriculture census data
<ul>
<li>Ramesh Chand..., Farm Size and Productivity: Understanding the Strengths of Smallholders and Improving Their Livelihoods</li>
<li>Bhim Reddy..., Rise of "New Landlords": A rejoinder</li>
</ul>
</li>
<li>Using web and satellite data
<ul>
<li>Sunandan Chakraborty..., Computing the Rate of Disappearance of Cropland Using Satellite Images</li>
<li>Sunandan Chakraborty..., Using Web Information Sources for Location Specific Summarization of Climatic and Agricultural Trends</li>
</ul>
</li>
<li>Improved data collection
<ul>
<li>Calogero Carletto..., From Guesstimates to GPStimates: Land Area Measurement and Implication for Agricultural Analysis</li>
</ul>
</li>
<li><strong>Project idea:</strong> Find spatiotemporal patterns in the agricultural census data to identify outliers, and search for newspaper articles which can explain the observations. </li>
<li><strong>Project idea: </strong>Match the agriculture census data against satellite data to understand the accuracy of data collection.
<ul>
</ul>
</li>
</ul>
</td>
</tr>
<tr>
<td>Mining patterns</td>
<td>
<ul>
<li>Rich Lands Poor People</li>
<li>Norman Loayza..., Poverty, Inequality, and the Local Natural Resource Curse</li>
<li><strong>Project idea: </strong>Use satellite data observations around mining areas to understand changes in local socioeconomic conditions. Match with unit level census data as well. </li>
</ul>
</td>
</tr>
<tr>
<td>Industrial analysis</td>
<td>
<ul>
<li>Using census and industry surveys
<ul>
<li>Jayan Jose Thomas, India's Labour Market During the 2000s: Surveying the Changes</li>
<li>Abhiman Das..., Profitability of the Indian Corporate Sector: Productivity, Price, or Growth?</li>
<li>Dipak Mazundar, Employment and Inequality Outcomes in India</li>
<li>Balwant Singh..., Sectoral Linkages and Growth Prospects: Reflections on the Indian Economy</li>
</ul>
</li>
<li>Using social media data<br />
<ul>
<li>Alejandro Llorente..., Social Media Fingerprints of Unemployment</li>
<li>Dolan Antenucci..., Using Social Media to Measure Labour Market Flows</li>
<li>Scott R. Baker..., Measuring Economic Policy Uncertainty</li>
</ul>
<strong>Project idea: </strong>Use user-generated-content from platforms like Gram Vaani to overlay against macro observations, and triangulate the observations in a mixed methods approach. </li>
</ul>
</td>
</tr>
<tr>
<td rowspan="3">
<p><strong>Commodity prices and agriculture value chains<br /></strong></p>
<p><strong> </strong></p>
</td>
<td>Data collection</td>
<td>
<ul>
<li>Joshua Blumenstock..., The Price is Right? Statistical Evaluation of a Crowd-sourced Market Information System in Lliberia</li>
<li>Alberto Cavallo..., The Billion Prices Project: Using Online Prices for Measurement and Research</li>
<li><strong>Project idea: </strong>Build an app for brand X that local retailers can use to take a photograph of inventory on their shelves. Run image analysis on the photos to finally build a map of which X's competitor products are also stocked up. The retailers can be given a higher margin for reporting data regularly. </li>
</ul>
</td>
</tr>
<tr>
<td>Explaining price fluctuations</td>
<td>
<ul>
<li>Ashutosh Kumar Tripathi, Decomposing Variability in Agriculture Prices: The Case of Selected Indian Agricultural Commodities</li>
<li>Vijay Kumar Varadi, An Evidence of Speculation in Indian Commodity Markets</li>
<li>Sunandan Chakraborty..., Predicting Socio-Economic Indicators Using News Events</li>
<li><strong>Project idea: </strong>Already underway, analysis of commodity price tnd implement large data collecti, and use newspaper articles to classify their cause, especially to spot cases of hoarding at the local level. </li>
</ul>
</td>
</tr>
<tr>
<td>Supply chains</td>
<td>
<ul>
<li>Barbara Harriss-White, West Bengal's Rural Commercial Capital</li>
<li>Sukhpal Singh, New Markets for Smallholders in India: Exclusion, Policy and Mechanisms</li>
<li>Soham Sen..., ICT Applications for Smallholder Inclusion in Agribusiness Supply Chains</li>
<li><strong>Project idea: </strong>Visit different farmer producer organizations and build a value chain of their supply chain. Design app/IVR/SMS based ICT solutions to help the value chains operate in a more robust manner. We saw with the recent demonetization event how easily these supply chains can be disrupted, ICT solutions can possibly help smooth out transactions and market linkages. </li>
</ul>
</td>
</tr>
<tr>
<td>
<p><strong>Financial inclusion</strong></p>
</td>
<td>Microfinance<br /></td>
<td>
<ul>
<li>Sa-dhan, The Bharat Microfinance Report 2016</li>
<li>Sohini Paul, Creditworthiness of a Borrower and the Selection  Process in Micro-finance: A Case Study from the Urban Slums of India</li>
<li><strong>Project idea: </strong>Census and NSSO data report people's access to microfinance and SHG networks. Compare the data reported by the microfinance organizations (aggregated by Sa-dhan) with the census and NSSO data, to check for a close match. </li>
<li><strong>Project idea: </strong>Already underway, to use platforms like Gram Vaani to check how the microfinance funds are being utilized by the borrowers, problems faced by them, etc, and compare data reported by the people against the data reported by the microfinance organizations. </li>
<li><strong>Project idea: </strong>Use census data about access to banking services, and compare with socioeconomic data from the regions to understand if banking penetration has increased in a strategic manner or ad hoc.</li>
</ul>
</td>
</tr>
<tr>
<td rowspan="3"><strong>Health</strong></td>
<td>Using web data</td>
<td>
<ul>
<li>Steven L. Scott..., Predicting the Present with Bayesian Structural Time Series</li>
<li>David Lazer..., The Parable of Google Flu: Traps in Big Data Analysis</li>
</ul>
</td>
</tr>
<tr>
<td>Using HMIS data</td>
<td>
<ul>
<li>Martin Mubangizi..., Coupling Spatiotemporal Disease Modeling with Diagnosis</li>
</ul>
</td>
</tr>
<tr>
<td>Using mobile phone data</td>
<td>
<ul>
<li>Andrew Tatem..., Integrating Rapid Risk Mapping and Mobile Phone Call Record Data for Strategic Malaria Elimination Planning</li>
<li>Enrique Frais-Martinez..., Agent-based Modeling of Epidemic Spreading Using Social Networks and Human Mobility Patterns</li>
</ul>
</td>
</tr>
<tr>
<td>
<p><strong>Disaster preparedness</strong></p>
</td>
<td><br /></td>
<td>
<ul>
<li>Raymond P. Guiteras, Satellites, Self-reports, and Submersion: Exposure to Floods in Bangladesh</li>
<li>Vanessa Frais-Martinez..., Measuring the Impact of Epidemic Alerts on Human Mobility</li>
</ul>
</td>
</tr>
<tr>
<td rowspan="3"><strong>Media</strong></td>
<td>Theory<br /></td>
<td>
<ul>
<li>Chapters from Edward Herman and Noam Chomsky, Manufacturing Consent: The Political Economy of Mass Media</li>
<li>Amelia Arsenault..., The Structure and Dynamics of Global Multi-Media Business Networks</li>
</ul>
</td>
</tr>
<tr>
<td>Content analysis</td>
<td>
<ul>
<li>Ceren Budak..., Fair and Balanced? Quantifying Media Bias Through Crowdsourced Content Analysis</li>
<li>Lada Adamic..., The Political Blogosphere and the 2004 US Election: Divided They Blog</li>
<li>M.D. Conover..., Political Polarization on Twitter</li>
<li>Eytan Bakshy..., Exposure to Ideologically Diverse News and Opinion on Facebook</li>
<li><strong>Project idea: </strong>Already underway, to detect bias in Indian mass media sources, and relate it to the ownership networks of the media houses. </li>
<li><strong>Project idea: </strong>Most mass media sources are now quite active on social media and use it as a distribution channel. Obtain Twitter data to track the flow of mass media articles on the social network. See if the spread of the articles tends to be constrained within certain social network boundaries, and if the boundaries for different sources overlap with each other. In short, try to answer if mass media bias gets neutralized on social media, or amplified?</li>
</ul>
</td>
</tr>
<tr>
<td>Information diffusion</td>
<td>
<ul>
<li>Sharad Goel..., The Structural Virality of Online Diffusion</li>
</ul>
</td>
</tr>
<tr>
<td>
<p><strong>Infrastructure</strong></p>
</td>
<td><br /></td>
<td>
<ul>
<li>Douglas Fabini..., Mapping Induced Residential Demand for Electricity in Kenya</li>
<li>Noah Klugman..., Grid Watch: Mapping Blackouts with Smart Phones</li>
<li>Fabien Chraim..., Monitoring Track Health Using Rail Vibration Sensors</li>
</ul>
</td>
</tr>
<tr>
<td rowspan="3"><strong>Experiments and evaluation</strong></td>
<td>Methods</td>
<td>
<ul>
<li>Ron Kohavi..., Controlled Experiments on the Web: Survey and Practical Guide</li>
</ul>
</td>
</tr>
<tr>
<td>Observations</td>
<td>
<ul>
<li>Joshua Blumenstock..., Promises and Pitfalls of Mobile Money in Afghanistan: Evidence from a Randomized Control Trial</li>
<li>Joshua Blumenstock..., Risk Sharing and Mobile Phones: Evidence in the Aftermath of Natural Disasters</li>
</ul>
</td>
</tr>
<tr>
<td>Outcomes</td>
<td>
<ul>
<li>Marianne Bertrand..., What's Advertising Content Worth? Evidence from a Consumer Credit Marketing Field Experiment</li>
<li>Mike Yeomans..., Making Sense of Recommendations</li>
</ul>
</td>
</tr>
</tbody>
</table>

**Interesting links **

[The 4th paradigm: Data intensive scientific discovery](http://www.astro.caltech.edu/~george/aybi199/4th_paradigm_book_complete_lr.pdf)

[The Earth Engine](https://earthengine.google.com/case_studies/)

[CEGA conference on technology for infrastructure monitoring](http://cega.berkeley.edu/events/technology-for-infrastructure-monitoring-2016/)

[Data science for social good, projects at the University of Chicago](https://dssg.uchicago.edu/projects/)

[Piketty: Capital in the 21st century](http://www.economist.com/blogs/economist-explains/2014/05/economist-explains)

[Open Corporates](https://opencorporates.com/)

**Project ideas**

----------

The Indian agricultural census has recorded data each year for the last 10+ years on land use, irrigation, fertilizer use, etc, right down to the village level. Can we detect trends and outliers from the data, and match them with policy changes and other events that can explain the analysis, or point out the inexplicable occurrences.

----------

Can we detect illegal practices such as hoarding from an analysis of commodity price and arrival data across 1500+ mandis of India. Can we augment this with agricultural production and demand statistics to understand why sudden price fluctuations happen in the first place.

---------

The Annual Survey of Industries brings out detailed information on employment statistics and wages. How do these correlate with government welfare expenses, and with health, education, and other trends.

---------

The use of nighttime satellite imagery to detect electrification has been seen to correlate nicely with socio-economic conditions in the places. Can we use similar methods to correlate observed data with government published data on electrification.

---------

Can we build nice visualizations of the Indian public accounting system to clearly see what income is realized and where is it spent, and trace individual cash flow paths.

---------

Can we detect overlaps between politicians and companies, and help journalists investigate patterns by providing them with nuggets of relevant mass media articles and social network linkages.

--------

Entity extraction algorithms can be adapted for Indian languages to mine regional newspapers. This news can then be listed against socio-economic and industrial trends mined about the location through surveys and other means as listed above, and also help augment the useful chunks of information about political and corporate overlap to be provided to journalists.

--------

Can we understand how data is collected about agricultural mandi prices, agricultural census, soil conditions, etc, and improve the process through an appropriate application of ICTs to be able to collect data more frequently, automatically, and reliably.

--------

Can we analyze Indian social media data and use it to understand the degree of polarization in people's access to news sources. This can also be related to bias detection in mainstream media, and cross-checking against ownership of media companies.

--------

Identify the application of IoT sensors in areas like irrigation, vaccination cold storage, vegetable cold storage, soil conditions, etc, or even the use of drones/UAVs, and build business plans aimed at high frequency data collection to improve the efficiency of operations.

-------
