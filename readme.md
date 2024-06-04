
# Dummy vs Stub vs Spy vs Mock

The "System under test" (SUT) refers to the class being tested.

- Dummy: facilitates the instantiation of the SUT
- Stub: manipulates the indirect inputs of the SUT
- Spy and Mock: control and verify the indirect outputs of the SUT

Indirect inputs refer to the information that the SUT needs to function which cannot be supplied through its signature.

Indirect outputs refer to the information that cannot be verified through the signature provided.
