1. How long did you spend on the coding test? What would you add to your solution if you had more time?
I spent approximately half hours on the coding test. My goal was to build a clean and functional solution that meets the requirements while being maintainable.

If I had more time, I would:

Add comprehensive unit and integration tests to ensure reliability and catch edge cases.

Improve error handling and user feedback to cover failure scenarios gracefully.

Implement code optimizations for better performance, especially if the app is expected to scale.

Include comments and documentation for easier onboarding of other developers.

Add accessibility features and enhance mobile responsiveness if it's a frontend task.

2. How would you track down a performance issue in production? Have you ever had to do this?
Yes, I’ve encountered performance issues in production before.

To track it down, I typically follow this approach:

Identify symptoms: Look at user reports or monitor dashboards (e.g., slow page loads, high CPU usage).

Check logs and metrics: Review application logs, error logs, and server resource metrics to look for anomalies or spikes.

Database tuning: Inspect slow queries using tools like MySQL’s EXPLAIN, or indexes.

Replicate in staging: If possible, replicate the issue in a staging environment for deeper investigation.

Optimize: Once the bottleneck is found, apply optimizations DB query optimization, caching, DB indexes.

Example: In one case, we noticed response times increasing during peak hours. After analysis, we found a missing index on a frequently queried column, and adding it reduced the response time by over 40%.

3. Please describe yourself using JSON.

{
  "name": "Mudashir Rashid Momin",
  "title": "Full Stack Developer",
  "skills": [
    "PHP",
    "CodeIgniter",
    "JavaScript",
    "MySQL",
    "REST APIs",
    "WebSockets",
    "HTML5",
    "CSS3",
    "Git"
  ],
  "experience": {
    "years": 4,
    "projects": ["letschat.in", "Gaming Platform", "Aution ecomm", "speedfinance.in"]
  },
  "traits": {
    "problemSolving": true,
    "teamPlayer": true,
    "curious": true,
    "attentionToDetail": true
  },
  "location": "India",
  "availability": "Immediate",
  "hobbies": ["Playing & Watching Cricket", "Listing to Songs"]
}
