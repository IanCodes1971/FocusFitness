import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.List;

public class WorkoutAdapter<WorkoutPlan> extends RecyclerView.Adapter<WorkoutAdapter.WorkoutViewHolder> {
    private List<WorkoutPlan> workoutList;

    public WorkoutAdapter(List<WorkoutPlan> workoutList) {
        this.workoutList = workoutList;
    }

    @NonNull
    @Override
    public WorkoutViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        // Inflate the item layout
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_workout, parent, false);
        return new WorkoutViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull WorkoutViewHolder holder, int position) {
        // Bind data to the views in the ViewHolder
        WorkoutPlan workout = workoutList.get(position);
        holder.titleTextView.setText(WorkoutPlan.getClass());
        holder.descriptionTextView.setText(WorkoutPlan.getClass());
    }

    @Override
    public int getItemCount() {
        return workoutList.size();
    }

    // ViewHolder class to hold the views
    public static class WorkoutViewHolder extends RecyclerView.ViewHolder {
        TextView titleTextView;
        TextView descriptionTextView;

        public WorkoutViewHolder(@NonNull View itemView) {
            super(itemView);
            // Initialize the views
            titleTextView = itemView.findViewById(R.id.titleTextView);
            descriptionTextView = itemView.findViewById(R.id.descriptionTextView);
        }
    }
}
