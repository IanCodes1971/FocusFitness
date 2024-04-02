package com.example.focusfitness;

public class WorkoutPlan
{
    private String title;
    private String description;

    public WorkoutPlan(String title, String description)
    {
        this.title = title;
        this.description = description;
    }
        public String getTitle() {
            return title;
        }
        public String getDescription() {
            return description;
        }
}

