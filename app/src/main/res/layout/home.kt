package layout

import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Button
import android.widget.Toast
import androidx.core.content.ContentProviderCompat.requireContext
import androidx.fragment.app.Fragment
import com.example.focusfitness.R

class home {

    package com.example.myapp.ui.home

    import android.os.Bundle
    import android.view.LayoutInflater
    import android.view.View
    import android.view.ViewGroup
    import android.widget.Button
    import android.widget.Toast
    import androidx.fragment.app.Fragment
    import com.example.myapp.R // Import your R file

    class HomeFragment : Fragment() {

        override fun onCreateView(
                inflater: LayoutInflater, container: ViewGroup?,
                savedInstanceState: Bundle?
        ): View? {
            // Inflate the layout for this fragment
            return inflater.inflate(R.layout.fragment_home, container, false)
        }

        override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
            super.onViewCreated(view, savedInstanceState)

            // Find the button by its ID
            val workoutButton = view.findViewById<Button>(R.id.workoutbutton)

            // Set click listener for the button
            workoutButton.setOnClickListener {
                // Action to perform when the button is clicked
                // For example, you can start a new activity or display a toast message
                Toast.makeText(requireContext(), "Workout button clicked", Toast.LENGTH_SHORT).show()
            }
        }
    }


}