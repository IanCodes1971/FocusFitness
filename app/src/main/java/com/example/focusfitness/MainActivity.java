import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import java.util.ArrayList;
import java.util.List;
import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.example.focusfitness.WorkoutPlan;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    private RecyclerView recyclerView;
    private WorkoutAdapter adapter;
    private List<WorkoutPlan> workoutList;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        recyclerView = findViewById(R.id.recyclerView);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));

        // Create dummy workout plans (replace this with actual data)
        workoutList = new ArrayList<>();
        workoutList.add(new WorkoutPlan("Bulking Workout Plan", "Focus on building muscle mass"));
        workoutList.add(new WorkoutPlan("Cutting Workout Plan", "Focus on losing body fat"));

        // Initialize and set the adapter
        adapter = new WorkoutAdapter(workoutList);
        recyclerView.setAdapter(adapter);
    }
}
